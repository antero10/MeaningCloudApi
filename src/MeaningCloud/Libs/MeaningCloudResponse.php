<?php


/**
 * MeaningCloudResponse Class Doc Comment.
 *
 * @category Class
 *
 * @author   "Gustavo Sánchez" <gustavo@bunkerdb.com>
 * @license  http://opensource.org/licenses/GPL-3.0 GNU General Public License 3.0
 *
 * @link     https://github.com/BunkerDB/sentimental
 */
class MeaningCloudResponse
{
    public $code;
    public $credits;
    public $remaining_credits = null;
    public $score_tag;
    public $agreement;
    public $subjectivity;
    public $confidence;
    public $irony;
    public $sentence_list;
    public $sentimented_entity_list;
    public $sentimented_concept_list;

    public function __construct($attributes)
    {
        $this->code = $attributes['status']['code'];
        $this->credits = $attributes['status']['credits'];
        $this->remaining_credits = $attributes['status']['remaining_credits'];
        $this->score_tag = $attributes['score_tag'];
        $this->agreement = $attributes['agreement'];
        $this->subjectivity = $attributes['subjectivity'];
        $this->confidence = $attributes['confidence'];
        $this->irony = $attributes['irony'];
        $this->sentence_list = $attributes['sentence_list'];
        $this->sentimented_entity_list = $attributes['sentimented_entity_list'];
        $this->sentimented_concept_list = $attributes['sentimented_concept_list'];
    }
    
    public function getSentimentValue()
    {
        switch ($this->score_tag) {
            case 'P+':
                return 1;
            case 'P':
                return 0.8;
            case 'NEU':
                return 0.5;
            case 'N':
                return 0.25;
            case 'N+':
                return 0;
            case 'NONE':
                return 0; 
        }
    }
}
