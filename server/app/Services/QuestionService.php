<?php
namespace App\Services;
use App\Repositories\Eloquents\QuestionRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Exception;


/**
 * Description of SubjectService
 *
 * @author Pham Quoc Phong 
 */
class QuestionService {

    private $subjectRepo;
    private $code;
    private $password;

    public function __construct(QuestionRepository $subjectRepo) {
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
