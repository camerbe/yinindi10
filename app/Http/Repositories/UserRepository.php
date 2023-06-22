<?php
    namespace app\Repositories;
    use App\Models\User;
    use App\Repositories\BaseRepository;
    use Illuminate\Support\Str;

    class UserRepository extends BaseRepository {
        public function __construct(User $user) {
            $this->model=$user;
        }
        public function findById($id){
            return parent::findById($id);
        }
        public function delete($id){
            return parent::delete($id);
        }
        public function update(array $input, $id){
            $input['nom']=Str::title($input['nom']);
            $input['prenom']=Str::title($input['prenom']);
            parent::update($input, $id);
            return $this->findById($id);
        }
        public function create(array $input){
            $input['nom']=Str::title($input['nom']);
            $input['prenom']=Str::title($input['prenom']);
            $input['password']=bcrypt($input['password']);
            return(parent::create($input)->id) ;

        }
    }
