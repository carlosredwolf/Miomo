<?php

namespace Miomo\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckAge implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //Código para validar la edad
       //$edad= intval((strtotime("now")-strtotime($value))/31536000);
       if($value!=18) {
        return true;
       }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You need to be of legal age.';
    }
}
