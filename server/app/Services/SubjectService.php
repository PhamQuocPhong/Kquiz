<?php
namespace App\Services;
use App\Repositories\Eloquents\SubjectRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Exception;


/**
 * Description of SubjectService
 *
 * @author Pham Quoc Phong 
 */
class SubjectService {

    private $subjectRepo;
    private $code;
    private $password;

    public function __construct(SubjectRepository $subjectRepo) {
        $this->subjectRepo = $subjectRepo;
    }

    public function fecth($id){
    	return $this->subjectRepo->fetch($id);
    }

    public function fetchAll(){
    	return $this->subjectRepo->fetchAll();
    }

    public function paginate(){
    	return $this->subjectRepo->paginate();
    }

    public function create($data){
        return $this->subjectRepo->create($data);
    }


   
}
