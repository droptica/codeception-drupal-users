<?php

namespace Codeception\Module;

/**
 * Class DrupalTestUser
 * @package Codeception\Module
 */
class DrupalTestUser
{
  /**
   * User UID.
   *
   * @var
   */
  public $uid;

  /**
   * User username.
   *
   * @var
   */
  public $name;

  /**
   * User password.
   *
   * @var
   */
  public $pass;

  /**
   * User email.
   *
   * @var null
   */
  public $email;

  /**
   * User roles.
   *
   * @var array
   */
  public $roles = array();

  /**
   * User custom fields.
   *
   * @var array
   */
  public $custom_fields = array();

  /**
   * DrupalTestUser constructor.
   * @param $name
   * @param $pass
   * @param array $roles
   * @param null $email
   * @param array $custom_fields
   */
  public function __construct($name, $pass, $roles = array(), $email = null, $custom_fields = array())
  {
    $this->name = $name;
    $this->pass = $pass;
    $this->roles = $roles;
    $this->email = $email;
    $this->custom_fields = $custom_fields;
  }

  /**
   * @return mixed
   */
  public function __toString()
  {
    return $this->name;
  }
}
