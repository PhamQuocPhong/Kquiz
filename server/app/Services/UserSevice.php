<?php
namespace App\Services;
use App\Repositories\Eloquents\UserRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Exception;


/**
 * Description of UserService
 *
 * @author Pham Quoc Phong 
 */
class UserService {

    private $userRepo;
    private $code;
    private $password;

    public function __construct(UserRepository $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function create($data){
        return $this->userRepo->create($data);
    }

    public function login($code, $password){


    }

    public function register(){

    }

   
}
