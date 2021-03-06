<?php
namespace Drupal\auth0\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * User signin event.
 */
class Auth0UserSigninEvent extends Event {
  
  const NAME = 'auth0.signin';

  protected $user;
  protected $auth0Profile;
  
  /**
   * Initialize the event.
   */
  public function __construct($user, $auth0Profile) {
    $this->user = $user;
  }

  /**
   * Get the drupal user.
   */
  public function getUser() {
    return $this->user;
  }

  /**
   * Get the Auth0 profile.
   */
  public function getAuth0Profile() {
    return $this->auth0Profile;
  }

}
