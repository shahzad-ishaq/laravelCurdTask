<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;
use App\Models\Catagory;
use App\Http\Resources\Catagory as CatagoryResource;
   
class CatagoryController extends BaseController
{
    public function index()
    {
        $Catagorys = Catagory::all();
        return $this->sendResponse(CatagoryResource::collection($Catagorys), 'Posts fetched.');
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $Catagory = Catagory::create($input);
        return $this->sendResponse(new CatagoryResource($Catagory), 'Post created.');
    }
   
    public function show($id)
    {
        $Catagory = Catagory::find($id);
        if (is_null($Catagory)) {
            return $this->sendError('Post does not exist.');
        }
        return $this->sendResponse(new CatagoryResource($Catagory), 'Post fetched.');
    }
    
    public function update(Request $request, Catagory $Catagory)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'title' => 'required',
            'description' => 'required'
        ]);
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        $Catagory->title = $input['title'];
        $Catagory->description = $input['description'];
        $Catagory->save();
        
        return $this->sendResponse(new CatagoryResource($Catagory), 'Post updated.');
    }
   
    public function destroy(Catagory $Catagory)
    {
        $Catagory->delete();
        return $this->sendResponse([], 'Post deleted.');
    }
}