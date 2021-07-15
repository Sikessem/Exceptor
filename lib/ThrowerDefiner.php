<?php namespace SIKessEm\Errors;

use \Throwable;

/**
 * The thrower interface
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/errors
 * @license Apache-2.0
 */
interface ThrowerDefiner {

  /**
   * Throw an error or an exception
   *
   * @param  \Throwable $e The error or exception to throw
   * @return self
   */
  public function throw(Throwable $e): self;
}
