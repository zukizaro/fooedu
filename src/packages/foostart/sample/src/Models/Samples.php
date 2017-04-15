<?php

namespace Foostart\Sample\Models;

use Illuminate\Database\Eloquent\Model;

class Samples extends Model {

    protected $table = 'samples';
    public $timestamps = false;
    protected $fillable = [
        'sample_name',
        'category_id',
        'sample_image',
        'sample_overview',
        'sample_description',
        'slideshow_id'
    ];
    protected $primaryKey = 'sample_id';

    /**
     *
     * @param type $params
     * @return type
     */
    public function get_samples($params = array()) {
        $eloquent = self::orderBy('sample_id');

        //sample_name
        if (!empty($params['sample_name'])) {
            $eloquent->where('sample_name', 'like', '%'. $params['sample_name'].'%');
        }

        $samples = $eloquent->paginate(10);//TODO: change number of item per page to configs

        return $samples;
    }



    /**
     *
     * @param type $input
     * @param type $sample_id
     * @return type
     */
    public function update_sample($input, $sample_id = NULL) {

        if (empty($sample_id)) {
            $sample_id = $input['sample_id'];
        }

        $sample = self::find($sample_id);

        if (!empty($sample)) {

            $sample->sample_name = $input['sample_name'];
            $sample->category_id = $input['category_id'];
            $sample->sample_image = $input['sample_image'];
            $sample->sample_overview = $input['sample_overview'];
            $sample->sample_description = $input['sample_description'];
            $sample->slideshow_id = $input['slideshow_id'];

            $sample->save();

            return $sample;
        } else {
            return NULL;
        }
    }

    /**
     *
     * @param type $input
     * @return type
     */
    public function add_sample($input) {

        $sample = self::create([
                    'sample_name' => @$input['sample_name'],
                    'category_id' => @$input['category_id'],
                    'sample_image' => @$input['sample_image'],
                    'sample_overview' => @$input['sample_overview'],
                    'sample_description' => @$input['sample_description'],
                    'slideshow_id' => @$input['slideshow_id'],
        ]);
        return $sample;
    }
}
