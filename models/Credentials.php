<?php

class Credentials
{
    private $id = 0;
    private $name = '';
    private $domain = '';
    private $cms_username = '';
    private $cms_password = '';

    private $errors = [];

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCmsUsername()
    {
        return $this->cms_username;
    }

    /**
     * @param string $cms_username
     */
    public function setCmsUsername($cms_username)
    {
        $this->cms_username = $cms_username;
    }

    /**
     * @return string
     */
    public function getCmsPassword()
    {
        return $this->cms_password;
    }

    /**
     * @param string $cms_password
     */
    public function setCmsPassword($cms_password)
    {
        $this->cms_password = $cms_password;
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
    }



}