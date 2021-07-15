<?php namespace SIKessEm\Errors;

/**
 * The thrower class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/errors
 * @license Apache-2.0
 */
class Thrower implements ThrowerDefiner {
  use DefinedThrower;

  /**
   * Create a new thrower
   *
   * @param Catcher $catcher The catcher of the throws
   */
  public function __construct(Catcher $catcher) {
    $this->catcher = $catcher;
  }

  /**
   * @var Catcher The catcher of the throws
   */
  protected Catcher $catcher;

  /**
   * @return Catcher The catcher of the throws
   */
  public function catcher(): Catcher {
    return $this->catcher;
  }
}
