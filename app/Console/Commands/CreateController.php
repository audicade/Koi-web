<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'controller:model {name}';

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
    public function __construct()
    {
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

        $content = "<?php\r\n\r\nnamespace App\\Http\\Controllers;\r\n\r\nuse App\\Models\\".$model_name.";\r\nuse App\\Repositories\\".$model_name."Service;\r\nuse Illuminate\\Http\\Request;\r\n\r\nclass ".$model_name."Controller extends Controller\r\n{\r\n    private $".strtolower($model_name)."Service;\r\n\r\n    public function __construct(".$model_name."Service $".strtolower($model_name)."Service)\r\n    {\r\n        ".'$this'."->".strtolower($model_name)."Service = $".strtolower($model_name)."Service;\r\n    }\r\n\r\n\r\n    public function index()\r\n    {\r\n        ".'$data'." = ".'$this'."->".strtolower($model_name)."Service->all();\r\n        return view('admin.".strtolower($model_name).".index', compact('data'));\r\n    }\r\n\r\n\r\n    public function create()\r\n    {\r\n        return view('admin.".strtolower($model_name).".create');\r\n    }\r\n\r\n\r\n    public function store(Request ".'$request'.")\r\n    {\r\n        ".'$this'."->".strtolower($model_name)."Service->store(".'$request->all()'.");\r\n        return redirect()->route('".strtolower($model_name).".index')->with('success','".$model_name." has success created');\r\n    }\r\n\r\n\r\n    public function show(".$model_name." $".strtolower($model_name).")\r\n    {\r\n        return view('admin.".strtolower($model_name).".show', compact('".strtolower($model_name)."'));\r\n    }\r\n\r\n\r\n    public function edit(".$model_name." $".strtolower($model_name).")\r\n    {\r\n        return view('admin.".strtolower($model_name).".edit', compact('".strtolower($model_name)."'));\r\n    }\r\n\r\n\r\n    public function update(Request ".'$request'.", ".$model_name." $".strtolower($model_name).")\r\n    {\r\n        ".'$this'."->".strtolower($model_name)."Service->update(".'$request->all()'.",$".strtolower($model_name)."->id);\r\n        return redirect()->route('".strtolower($model_name).".index')->with('success','".$model_name." has success updated');\r\n    }\r\n\r\n\r\n    public function destroy(".$model_name." $".strtolower($model_name).")\r\n    {\r\n        ".'$this'."->".strtolower($model_name)."Service->destroy($".strtolower($model_name)."->id);\r\n        return redirect()->route('".strtolower($model_name).".index')->with('success','".$model_name." has success deleted');\r\n    }\r\n}";

        $fp = fopen(base_path('app')."\Http\Controllers/".$model_name."Controller.php","wb");
        fwrite($fp,$content);
        fclose($fp);
    }
}
