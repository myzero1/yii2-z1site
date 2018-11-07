<?php
namespace myzero1\z1site\models;

use myzero1\z1site\models\base\BaseLoginForm;

/**
 * Login form
 */
class LoginForm extends BaseLoginForm
{
    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function rewrite()
    {
        var_dump('rewrite-------'.__FILE__);;exit;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function add()
    {
        var_dump('add-------'.__FILE__);;exit;
    }
}
