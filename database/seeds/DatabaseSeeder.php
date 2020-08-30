<?php

use Illuminate\Database\Seeder;
use App\Politician;
use App\SocialMediaUser;
use App\Reimbursement;
use GuzzleHttp\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client(['base_uri' => 'http://dadosabertos.almg.gov.br']);

        $politicians = $client->request('GET', '/ws/deputados/situacao/1?formato=json')->getBody();
        $politicians = json_decode($politicians, true);
        $politicians = $politicians["list"];

        foreach($politicians as $politician) {
            // Seeds politicians table
            Politician::create([
                'politician_id' => $politician['id'],
                'name' => $politician['nome'],
                'party' => $politician['partido']
            ]);
            
            // Seeds social_media_users table
            $socialMediaResponse = $client->request('GET', '/ws/deputados/'.$politician['id'].'?formato=json')->getBody();
            $socialMediaResponse = json_decode($socialMediaResponse, true);
            $socialMediaResponse = $socialMediaResponse['deputado'];
            foreach($socialMediaResponse['redesSociais'] as $socialMedia) {
                SocialMediaUser::create([
                    'social_media_id' => $socialMedia['redeSocial']['id'],
                    'social_media_name' => $socialMedia['redeSocial']['nome'],
                    'politician_id' => $socialMediaResponse["id"]
                ]);
            }

            // Seeds reimbursements table
            for ($month=1; $month <= 12; $month++) { 
                $reimbursements = $client
                ->request('GET', '/ws/prestacao_contas/verbas_indenizatorias/deputados/'.$politician['id'].'/2019/'.$month.'?formato=json')
                ->getBody();
                $reimbursements = json_decode($reimbursements, true);
                $reimbursements = $reimbursements['list'];
                foreach($reimbursements as $reimbursement) {
                    foreach($reimbursement['listaDetalheVerba'] as $eachReimbursement){
                        Reimbursement::create([
                            'politician' => $eachReimbursement['idDeputado'],
                            'month' => $month
                        ]);
                    }
                }
                
            }
            
        }
    }
}
