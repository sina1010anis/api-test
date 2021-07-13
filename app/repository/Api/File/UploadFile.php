<?php


namespace App\repository\Api\File;


use Carbon\Carbon;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class UploadFile
{
    protected $ORG_name;
    private $fileSystem;
    public function __construct()
    {
        $this->fileSystem = new Filesystem();
    }

    public function upload(Request $request)
    {
        $tmp = $request->file('image');
        $this->ORG_name =  $tmp->getClientOriginalName();
        $this->setName();
        $tmp->move(public_path('img/') ,$this->ORG_name);
        return $this;
    }
    public function setName(){
        if ($this->fileSystem->exists(public_path('img/'.$this->ORG_name))){
            return $this->ORG_name = Carbon::now()->timestamp.$this->ORG_name;
        }
    }
    public function view(){
        echo '<img src="'.url('img/'.$this->ORG_name).'" />';
    }
}
