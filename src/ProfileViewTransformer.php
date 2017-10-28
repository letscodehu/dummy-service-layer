<?php

namespace Letscodehu;


class ProfileViewTransformer
{

    /**
     * Transforms a user to UserProfileView.
     * @param User $user
     * @return UserProfileView
     */
    public function transform(User $user) {
        return new UserProfileView();
    }

}