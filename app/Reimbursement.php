<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Politician;

class Reimbursement extends Model
{   

    protected $fillable = [
        'politician',
        'month'
    ];

    /**
     * Ranks the politicians according to him reimbursements requests
     * 
     * @param integer $month
     * @return array
     */
    public function rank($month) {
        $reimbursements = $this->where('month', '=', $month)->get();

        $rank = [];
        foreach($reimbursements as $reimbursement) {
            $politician = Politician::where('politician_id', '=', (int)$reimbursement['politician'])->first();

            if(!array_key_exists($politician['name'], $rank)){
                $rank[$politician['name']] = 0; 
            }

            $rank[$politician['name']]++;
        }
        arsort($rank);
        return $rank;
    }
}
