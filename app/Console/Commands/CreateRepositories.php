<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateRepositories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'repo:model {name}';

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
        if (!file_exists(base_path('app/Repositories'))) {
            $this->install($model_name);
        }else{
            $this->create($model_name);
        }
    }

    public function install($model_name)
    {
        mkdir(base_path('app/Repositories'), 0777);
        $abstract = "<?php\r\n\r\nnamespace App\\Repositories;\r\n\r\nabstract class RepositoryAbstract\r\n{\r\n\r\n    protected ".'$model'.";\r\n\r\n   abstract public function all();\r\n\r\n    abstract function getLatest();\r\n\r\n     abstract public function getOrderBy(string ".'$column'.", string ".'$method'." = 'asc');\r\n\r\n     abstract public function create(array ".'$data'.");\r\n\r\n     abstract public function store(array ".'$data'.");\r\n\r\n    abstract public function find(int ".'$id'.");\r\n\r\n    abstract public function update(array ".'$data'.", int ".'$id'.");\r\n\r\n     abstract public function delete(int ".'$id'.");\r\n\r\n   abstract public function destroy(int ".'$id'.");\r\n}";

        $repository = "<?php\r\n\r\nnamespace App\\Repositories;\r\n\r\nuse Illuminate\\Database\\Eloquent\\Model;\r\nuse Illuminate\\Support\\Collection;\r\n\r\nclass Repository extends RepositoryAbstract\r\n{\r\n\r\n    protected ".'$model'.";\r\n\r\n   public function all()\r\n    {\r\n        return ".'$this->model->all()'.";\r\n    }\r\n\r\n       public function getLatest()\r\n    {\r\n        return ".'$this->model->latest()->get()'.";\r\n    }\r\n\r\n     public function getOrderBy(string ".'$column'.", string ".'$method'." = 'asc')\r\n    {\r\n        return ".'$this->model->orderBy($column, $method)->get();'."\r\n    }\r\n\r\n      public function create(array ".'$data'.")\r\n    {\r\n        return ".'$this->model->create($data)'.";\r\n    }\r\n\r\n      public function store(array ".'$data'.")\r\n    {\r\n        return ".'$this->create($data)'.";\r\n    }\r\n\r\n     public function find(int ".'$id'.")\r\n    {\r\n        return ".'$this->model->find($id)'.";\r\n    }\r\n\r\n     public function update(array ".'$data'.", int ".'$id'.")\r\n    {\r\n        ".'$model'." = ".'$this->find($id)'.";\r\n        if (".'$model'.") {\r\n            ".'$model->update($data)'.";\r\n            return ".'$model'.";\r\n        }\r\n        return 0;\r\n    }\r\n\r\n     public function delete(int ".'$id'.")\r\n    {\r\n        ".'$model'." = ".'$this->find($id)'.";\r\n        if (".'$model'.") {\r\n            return ".'$model->delete()'.";\r\n        }\r\n        return 0;\r\n    }\r\n\r\n     public function destroy(int ".'$id'.")\r\n    {\r\n        return ".'$this->delete($id)'.";\r\n    }\r\n}";

        $fp_abstarct = fopen(base_path('app')."\Repositories/RepositoryAbstract.php","wb");
        fwrite($fp_abstarct,$abstract);
        fclose($fp_abstarct);

        $fp_repository = fopen(base_path('app')."\Repositories/Repository.php","wb");
        fwrite($fp_repository,$repository);
        fclose($fp_repository);

        $this->create($model_name);
    }

    public function create($model_name)
    {
        $content = "<?php\r\n\r\nnamespace App\\Repositories;\r\n\r\nuse App\\Models\\".$model_name.";\r\n\r\nclass ".$model_name."Service extends Repository\r\n{\r\n\r\n    public function __construct()\r\n    {\r\n        ".'$this->model'." = new ".$model_name.";\r\n    }\r\n}";

        $fp = fopen(base_path('app')."\Repositories/".$model_name."Service.php","wb");
        fwrite($fp,$content);
        fclose($fp);
    }
}
