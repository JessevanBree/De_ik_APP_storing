<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = array( 'Is de situatie voor jou op dit moment beheersbaar',
                            'Tref je een situatie aan waarbij opdrachtgever PWN moet worden ingeschakeld',
                            'Is het veilig voor jezelf en de omgeving',
                            'IS de storing in het straatwerk? De stoep, of rijweg',
                            'Heb ik ondersteuning nodig',
                            'Is er een PWN monteur aanwezig'
        );

        foreach($questions as $value){
            DB::table('questions')->insert([
                'question' => $value,
                'boolanswer' => true,
                'comment' => true,
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
