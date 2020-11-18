<?php

namespace ExponentPhpSDK\Exceptions;

class ExpoRegistrarException extends ExpoException
{
    public static function invalidToken($token)
    {
        return new static($token, 422);
    }

    /**
     * Register token exception
     *
     * @return static
     */
    public static function couldNotRegisterInterest()
    {
        return new static('Could not register the token provided for the interest, due to internal error.', 500);
    }

    /**
     * Empty interests exception
     *
     * @return static
     */
    public static function emptyInterests()
    {
        return new static('No interests found for this notification, make sure interests are already registered.', 404);
    }

    /**
     * Could not remove interest exception
     *
     * @return static
     */
    public static function couldNotRemoveInterest()
    {
        return new static('Could not remove interest, due to internal error.', 500);
    }
}
