<?php
use App\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags=['coppia', 'gruppo', 'scolaresca', 'famiglia','animali','singoli','compagnia'];

        foreach ($tags as $tag){
            $new_tag_object = new Tag();
            $new_tag_object->name = $tag;
            $new_tag_object->save();
        }
    }
}
