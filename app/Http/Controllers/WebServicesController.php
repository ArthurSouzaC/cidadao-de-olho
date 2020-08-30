<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Politician;
use App\SocialMediaUser;
use App\Reimbursement;

class WebServicesController extends Controller
{   
    private $politicianRepo;
    private $smUserRepo;
    private $reimbursementsRepo;

    public function __construct(Politician $politicianRepo, SocialMediaUser $smUserRepo, Reimbursement $reimbursementsRepo) {
        $this->politicianRepo = $politicianRepo;
        $this->smUserRepo = $smUserRepo;
        $this->reimbursementsRepo = $reimbursementsRepo;
    }
    
    /**
     * List all the API webservices.
     *  
     * @return \Illuminate\Http\Response
     */
    public function home() {
        return response()->json([
            'webservices' => [
                'Ranking de redes sociais mais utilizadas pelos deputados da ALMG' => 'host/api/redes_sociais',
                'Ranking de deputados que mais reembolsaram verbas indenizatórias por mês em 2019' => 'host/api/verbas_ind/2019/{mês}'
            ]
        ]);
    }

    /**
     * List all of the social medias used by the politicians from ALMG and rank them by number of users.
     *  
     * @return \Illuminate\Http\Response
     */
    public function SocialMediaIndex() {
        return response()->json($this->smUserRepo->rank());
    }

    /**
     * List all of the social medias used by the politicians from ALMG and rank them by number of users.
     * 
     * @param int $month
     * @return \Illuminate\Http\Response
     */
    public function ReimbursementIndex($month) {
        return response()->json($this->reimbursementsRepo->rank($month));
    }
}
