<?php

class Controller {
    private $model;
    private $request;
    private $view;
    
    public function __construct(Model $model, Request $request, View $view) {
        $this->model = $model;
        $this->request = $request;
        $this->view = $view;
        
        // Which command did the user send?
        switch($request->getCommand()){
            case 'create':
                $text = $request->getText();
                $this->model->createTask($text);
                break;
            case 'update':
                break;
            case 'delete':
                $id=$request->getId();
                $this->model->deleteTask($id);
                break;
            default:
                
        }
        
        // Display content
        $taskList = $this->model->getTaskList();
        $view->sendHTTPResponse($taskList);
    }
}
