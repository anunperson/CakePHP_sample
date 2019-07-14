<?php
namespace App\Controller;



class UsersController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
     
    public function index()
    {
        $this->loadComponent('Paginator');
        $users = $this->Paginator->paginate($this->Users->find());
        $this->set(compact('users'));
        
    }
    
    
    public function add()
    {
        $new_user = $this->Users->newEntity();
        
        //POSTが来たら登録してリストに戻る or エラー表示つけて戻す
        if ($this->request->is('post')) {
            $new_user = $this->Users->patchEntity($new_user, $this->request->getData());
            
            if ($this->Users->save($new_user)) {
                $this->Flash->success(__('ユーザー追加成功')); //日本語テスト
                return $this->redirect(['action' => 'index']);
             }
             $this->Flash->error(__('Unable to add new user.'));
        }
        
        
        //POSTが来てない場合は登録画面を表示
        $this->set(compact('new_user'));
        
        
    }
}
