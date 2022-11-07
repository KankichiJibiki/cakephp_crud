<?php
namespace App\Controller;

class PostsController extends AppController{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }

    public function index(){
        $this->set('posts', $this->Posts->find('all'));
    }

    public function add(){
        $post = $this->Posts->newEmptyEntity();

        if($this->request->is('post')){
            $post = $this->Posts->patchEntity($post, $this->request->getData());

            if($this->Posts->save($post)){
                $this->Flash->success('Posted successfully');
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Unable to post');
        }
        $this->set('posts', $post);
    }

    public function edit($id){
        $post = $this->Posts->find($id)->firstOrFail();
    }
}