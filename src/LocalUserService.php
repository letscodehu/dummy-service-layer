<?php

namespace Letscodehu;

class LocalUserService implements UserService
{

    private $transformer;
    private $userDao;

    /**
     * LocalUserService constructor.
     * @param ProfileViewTransformer $transformer
     * @param UserDao $userDao
     */
    public function __construct(ProfileViewTransformer $transformer, UserDao $userDao)
    {
        $this->transformer = $transformer;
        $this->userDao = $userDao;
    }

    /**
     * @param $id
     * @return UserProfileView
     */
    public function showProfile($id)
    {
        return $this->transformer->transform($this->userDao->findOne($id));
    }
}