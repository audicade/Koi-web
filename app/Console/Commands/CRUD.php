<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class CRUD extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:model {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    private $repository;
    public function __construct(CreateRepositories $repository)
    {
        $this->repository = $repository;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $model_name = $this->argument('name');
        $data = array();
        $j = 1;
        for ($i=0; $i < $j; $i++) {
            $std = $this->ask('name atrribure? (input exit to cancel or execute to generate)');
            if($std=='cancel'){
                $this->info('The command was cancel!');
                break;
            }

            if($std!='cancel' && $std!='execute'){
                $tipe = $this->ask('tipe data?');
                $input = $this->ask('input tipe?');
                $data[] = (object) array('attr' => $std, 'tipe' => $tipe, 'input'=>$input);
                $j++;
            }

            if($std=='execute'){
                $this->createModel($data,$model_name);
                $this->createMigration($data,$model_name);
                Artisan::call('repo:model', ['name' => $model_name ]);
                Artisan::call('controller:model', ['name' => $model_name ]);
                $resource = "Route::resource('".strtolower($model_name)."',App\\Http\\Controllers\\".$model_name."Controller::class);";
                $fp = fopen(base_path('routes/web.php'), 'a');
                fwrite($fp, $resource);
                $menu = "<li class=\"sidebar-item\">\r\n    <a class=\"sidebar-link waves-effect waves-dark sidebar-link\" href=\"{{ route('".strtolower($model_name).".index') }}\"\r\n        aria-expanded=\"false\">\r\n        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>\r\n        <span class=\"hide-menu\">".$model_name." Management</span>\r\n    </a>\r\n</li>";
                $fp = fopen(base_path('resources/views/component/sidebar.blade.php'), 'a');
                fwrite($fp, $menu);
                if (!file_exists(base_path('resources/views/admin'))) {
                    mkdir(base_path('resources/views/admin'), 0777);
                }

                if (!file_exists(base_path('resources/views/admin/'.strtolower($model_name)))) {
                    mkdir(base_path('resources/views/admin/'.strtolower($model_name)), 0777);
                    $this->viewCreate($data, $model_name);
                    $this->viewEdit($data, $model_name);
                    $this->viewIndex($data, $model_name);
                    $this->viewShow($data, $model_name);
                }else{
                    $this->viewCreate($data, $model_name);
                    $this->viewEdit($data, $model_name);
                    $this->viewIndex($data, $model_name);
                    $this->viewShow($data, $model_name);
                }

                $migrate = $this->ask('are you want to migtare database?');
                if ($migrate=='yes') {
                    Artisan::call('migrate');
                }else{
                    $this->info('The command was successful!');
                }
                break;
            }
        }

    }

    public function createModel(array $data, $model_name)
    {
        $str = '';
        foreach ($data as $item) {
            $str = $str."\r\n        '".$item->attr."',";
        };
        $data = "[".$str."\r\n    ]";
        $html = "<?php\r\n\r\nnamespace App\\Models;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Factories\\HasFactory;\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\n\r\nclass ".$model_name." extends Model\r\n{\r\n    use HasFactory;\r\n\r\n    protected ".'$fillable'." = ".$data.";\r\n}\r\n";
        $fp = fopen(base_path('app')."\Models/".$model_name.".php","wb");
        fwrite($fp,$html);
        fclose($fp);
    }

    public function createMigration(array $data, $model_name)
    {
        $str = '';
        foreach ($data as $item) {
            $str = $str."\r\n            ".'$table->'.$item->tipe.'('."'".$item->attr."'".')'.";";
        };
        $html = "<?php\r\n\r\nuse Illuminate\\Database\\Migrations\\Migration;\r\nuse Illuminate\\Database\\Schema\\Blueprint;\r\nuse Illuminate\\Support\\Facades\\Schema;\r\n\r\nclass Create".$model_name."sTable extends Migration\r\n{\r\n    public function up()\r\n    {\r\n        Schema::create('".strtolower($model_name)."s', function (Blueprint ".'$table'.") {\r\n            ".'$table->id()'.";".$str."\r\n            ".'$table->timestamps()'.";\r\n        });\r\n    }\r\n\r\n    public function down()\r\n    {\r\n        Schema::dropIfExists('".strtolower($model_name)."s');\r\n    }\r\n}";
        $file_name = date('Y_m_d_His').'_create_'.strtolower($model_name).'s_table';
        $fp = fopen(base_path('database')."\migrations/".$file_name.".php","wb");
        fwrite($fp,$html);
        fclose($fp);
    }

    public function viewCreate(array $data, $model_name)
    {
        $str = '';
        foreach ($data as $item) {
            $str = $str."                    @include('component.input',['input'=> Form::".$item->input."('".$item->attr."',null,['class' => 'form-control']),'label'=> Form::label('".$item->attr."', '".$item->attr."')])\r\n";
        };

        $content = "@extends('layouts.admin')\r\n@section('content')\r\n<div class=\"container-fluid\">\r\n    <div class=\"row\">\r\n        <div class=\"col-md-12\">\r\n            <div class=\"white-box\">\r\n                <h3 class=\"box-title\">Create</h3>\r\n                {!! Form::open(['route' => ['".strtolower($model_name).".store'], 'method' => 'post']) !!}\r\n".$str."                <button type=\"submit\" onclick=\"return confirm('are you sure?')\" class=\"btn btn-success mx-1 text-white\" title=\"Create\"><i class=\"fas fa-plus\"></i> Create</button>\r\n {!! Form::close() !!}\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n@endsection";

        $create = fopen(base_path('resources/views/admin/'.strtolower($model_name))."\create.blade.php","wb");
        fwrite($create, $content);
        fclose($create);
    }

    public function viewEdit(array $data, $model_name)
    {
        $str = '';
        foreach ($data as $item) {
            $str = $str."                    @include('component.input',['input'=> Form::".$item->input."('".$item->attr."',$".strtolower($model_name)."->".$item->attr.",['class' => 'form-control']),'label'=> Form::label('".$item->attr."', '".$item->attr."')])\r\n";
        };

        $content = "@extends('layouts.admin')\r\n@section('content')\r\n<div class=\"container-fluid\">\r\n    <div class=\"row\">\r\n        <div class=\"col-md-12\">\r\n            <div class=\"white-box\">\r\n                <h3 class=\"box-title\">Create</h3>\r\n                {!! Form::open(['route' => ['".strtolower($model_name).".update', $".strtolower($model_name)."], 'method' => 'put']) !!}\r\n ".$str."                <button type=\"submit\" onclick=\"return confirm('are you sure?')\" class=\"btn btn-primary mx-1 text-white\" title=\"Update\">Update</button>\r\n {!! Form::close() !!}\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n@endsection";

        $edit = fopen(base_path('resources/views/admin/'.strtolower($model_name))."/edit.blade.php","wb");
        fwrite($edit, $content);
        fclose($edit);
    }

    public function viewIndex(array $data, $model_name)
    {
        $header = '';
        $value = '';
        foreach ($data as $item) {
            $header = $header."                                <th class=\"border\">".ucfirst($item->attr)."</th>\r\n";
            $value = $value."                                <td class=\"txt-oflo\">{{ ".'$item'."->".$item->attr." }}</td>\r\n";
        };

        $content = "@extends('layouts.admin')\r\n@section('page','".$model_name." Management')\r\n@section('breadcrumb')\r\n    <li><a href=\"#\" class=\"fw-normal\">".$model_name." Management</a></li>\r\n@endsection\r\n\r\n@section('content')\r\n<div class=\"container-fluid\">\r\n    <div class=\"row justify-content-center\">\r\n        <div class=\"col-lg-6 col-md-6\">\r\n            <div class=\"white-box analytics-info\">\r\n                <h3 class=\"box-title\">Total ".$model_name."</h3>\r\n                <ul class=\"list-inline two-part d-flex align-items-center mb-0\">\r\n                    <li>\r\n                        <div id=\"sparklinedash\"><canvas width=\"67\" height=\"30\"\r\n                                style=\"display: inline-block; width: 67px; height: 30px; vertical-align: top;\"></canvas>\r\n                        </div>\r\n                    </li>\r\n                    <li class=\"ms-auto\"><span class=\"counter text-success\">".'{{ $data->count() }}'."</span></li>\r\n                </ul>\r\n            </div>\r\n        </div>\r\n        <div class=\"col-lg-6 col-md-6\">\r\n            <div class=\"white-box analytics-info\">\r\n                <h3 class=\"box-title\">Last Created on</h3>\r\n                <ul class=\"list-inline two-part d-flex align-items-center mb-0\">\r\n                    <li>\r\n                        <div id=\"sparklinedash\"><canvas width=\"67\" height=\"30\"\r\n                                style=\"display: inline-block; width: 67px; height: 30px; vertical-align: top;\"></canvas>\r\n                        </div>\r\n                    </li>\r\n                    <li class=\"ms-auto\"><span class=\"counter text-success\">{{ ".'$data'."->count()>0?date('d F Y', strtotime(".'$data'."->sortByDesc('created_at')->first()->created_at)):'Empty' }}</span></li>\r\n                </ul>\r\n            </div>\r\n        </div>\r\n    </div>\r\n\r\n    <div class=\"row\">\r\n        <div class=\"col-md-12 col-lg-12 col-sm-12\">\r\n            <div class=\"white-box\">\r\n                <div class=\"d-md-flex justify-content-between mb-3\">\r\n                    <h3 class=\"box-title mb-0\">List ".$model_name."</h3>\r\n                    <a href=\"{{ route('".strtolower($model_name).".create') }}\" class=\"box-title mb-0 text-white btn btn-success\">Create ".$model_name."</a>\r\n                </div>\r\n                <div class=\"table-responsive\">\r\n                    <table class=\"table no-wrap data-table table-bordered\">\r\n                        <thead>\r\n                            <tr>\r\n                                <th class=\"border\">#</th>\r\n".$header."                                <th class=\"border\">Action</th>\r\n                            </tr>\r\n                        </thead>\r\n                        <tbody>\r\n                            @foreach (".'$data'." as ".'$item'.")\r\n                            <tr>\r\n                                <td>".'{{ $loop->iteration }}'."</td>\r\n".$value."                                <td class=\"d-flex\">\r\n                                    <a href=\"{{ route('".strtolower($model_name).".edit',".'$item'.") }}\" class=\"btn btn-primary mx-1\" title=\"Edit\"><i class=\"fas fa-pencil-alt\"></i></a>\r\n                                    <a href=\"{{ route('".strtolower($model_name).".show',".'$item'.") }}\" class=\"btn btn-warning mx-1\" title=\"View\"><i class=\"fas fa-eye\"></i></a>\r\n                                    {!! Form::open(['route' => ['".strtolower($model_name).".destroy', ".'$item'."], 'method' => 'delete']) !!}\r\n                                        <button type=\"submit\" onclick=\"return confirm('are you sure?')\" class=\"btn btn-danger mx-1\" title=\"Delete\"><i class=\"fas fa-trash-alt text-white\"></i></button>\r\n                                    {!! Form::close() !!}\r\n                                </td>\r\n                            </tr>\r\n                            @endforeach\r\n                        </tbody>\r\n                    </table>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n@endsection\r\n";

        $index = fopen(base_path('resources/views/admin/'.strtolower($model_name))."/index.blade.php","wb");
        fwrite($index, $content);
        fclose($index);
    }

    public function viewShow(array $data, $model_name)
    {
        $str = '';
        foreach ($data as $item) {
            $str = $str."                    @include('component.input',['input'=> Form::".$item->input."('".$item->attr."',$".strtolower($model_name)."->".$item->attr.",['class' => 'form-control']),'label'=> Form::label('".$item->attr."', '".$item->attr."')])\r\n";
        };

        $content = "@extends('layouts.admin')\r\n@section('content')\r\n<div class=\"container-fluid\">\r\n    <div class=\"row\">\r\n        <div class=\"col-md-12\">\r\n            <div class=\"white-box\">\r\n                <h3 class=\"box-title\">Detail </h3>                \r\n".$str."               \r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>\r\n@endsection";

        $show = fopen(base_path('resources/views/admin/'.strtolower($model_name))."/show.blade.php","wb");
        fwrite($show, $content);
        fclose($show);
    }
}
