<?php
namespace App\Http\Repositories\Auth;
use Tymon\JWTAuth\Contracts\Providers\Auth;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Exception;

/**
 * Created by PhpStorm.
 * User: tauke
 * Date: 20.08.2017
 * Time: 15:52
 */
class SentinelAuthAdapter implements Auth
{
    /**
     * Check a user's credentials
     *
     * @param  array  $credentials
     * @return bool
     */
    public function byCredentials(array $credentials = [])
    {

        try {
            $user = Sentinel::authenticate($credentials);
            return $user != false;
        } catch (ThrottlingException $e) {
            dd('Слишком частые обращения к БД', $e);
            return false;
        } catch (Exception $e) {
            // TODO: Написать норм return response json
            dd(2, $e);
            return false;
        }
    }
    /**
     * Authenticate a user via the id
     *
     * @param  mixed  $id
     * @return bool
     */
    public function byId($id)
    {
        try {
            $user = Sentinel::findById($id);
            if($user != null){
                Sentinel::login($user);
                return true;
            } else {
                return false;
            }
        } catch (\Exception $e) {
            dd(1, $e);
            // TODO: Написать норм return response json
            return false;
        }
    }
    /**
     * Get the currently authenticated user
     *
     * @return mixed
     */
    public function user()
    {
        return Sentinel::getUser();
    }
}