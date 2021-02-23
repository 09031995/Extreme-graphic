<?php
/**
 * Created by PhpStorm.
 * User: chopgwe
 * Date: 18/04/2017
 * Time: 14:25
 */

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository extends ResourceRepository {

    /**
     * @param User $user
     */
    public function __construct(Contact $contact) {
        $this->model = $contact;
    }

    public function getAll(){

      return $this->model->get();
    }

    public function getContactsForMonth(){
        $currentMonth = date('m');
        return $this->model->whereRaw('MONTH(created_at) = ?',[$currentMonth])->get();
    }
}