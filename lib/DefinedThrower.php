<?php namespace SIKessEm\Errors;

use \Throwable;

/**
 * The thrower trait
 *
 * @author  SIGUI Kessé Emmanuel
 * @package sikessem/errors
 * @license Apache-2.0
 */
trait DefinedThrower {

  /**
   * @return CatcherDefiner The catcher of the throws
   */
  abstract public function catcher(): CatcherDefiner;

  /**
   * Throw an error or an exception
   *
   * @param  \Throwable $e The error or exception to throw
   * @return self
   */
  public function throw(Throwable $e): self {
    $this->catcher()->catch($e);
    return $this;
  }
}
