<?php

    class PostsController extends AppController{
        
        public $components = array('Paginator');
        public $helpers = array('Html', 'Form');
        
        public function index(){
           $conditions = array();
           $this->paginate = array(
                    'limit' 		=> 8,
                    'order' 		=> 'Post.id DESC',
                    'conditions' 	=> $conditions
                ); 
           $this->Post->recursive = 0;
           $this->set('posts', $this->Paginator->paginate());
        }
        
        public function view($id = null) {
            if (!$id) {
                throw new NotFoundException(__('Invalid post'));
            }

            $post = $this->Post->findById($id);
            if (!$post) {
                throw new NotFoundException(__('Invalid post'));
            }
            $this->set('post', $post);
        }
        
        public function add(){
            if($this->request->is('post')){
                $this->Post->create();
                if($this->Post->save($this->request->data)){
                    $this->Session->setFlash(__('Your post has been saved.'), 'flash_success');
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to add your post.'), 'flash_warning');
            }
        }
        
        public function edit($id = null) {
            if (!$id) {
                throw new NotFoundException(__('Invalid post'));
            }

            $post = $this->Post->findById($id);
            if (!$post) {
                throw new NotFoundException(__('Invalid post'));
            }

            if ($this->request->is(array('post', 'put'))) {
                $this->Post->id = $id;
                if ($this->Post->save($this->request->data)) {
                    $this->Session->setFlash(__('Your post has been updated.'), 'flash_success');
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Session->setFlash(__('Unable to update your post.'), 'flash_warning');
            }

            if (!$this->request->data) {
                $this->request->data = $post;
            }
        }
        
        public function delete($id) {
            if ($this->request->is('get')) {
                throw new MethodNotAllowedException();
            }

            if ($this->Post->delete($id)) {
                $this->Session->setFlash(
                    __('The post with id: %s has been deleted.', h($id)), 'flash_delete'
                );
            } else {
                $this->Session->setFlash(
                    __('The post with id: %s could not be deleted.', h($id)), 'flash_warning'
                );
            }

            return $this->redirect(array('action' => 'index'));
        }
    }

?>
