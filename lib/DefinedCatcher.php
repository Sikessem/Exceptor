<?php namespace SIKessEm\Errors;

use \Throwable;

/**
 * The catcher trait
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/errors
 * @license Apache-2.0
 */
trait DefinedCatcher {

  /**
   * @return callback The handler of the throws
   */
  abstract public function handler();

  /**
   * Catch an error or an exception
   *
   * @param  \Throwable $e The error or exception to catch
   * @return self
   */
  public function catch(Throwable $e): self {
    if(!is_callable($this->handler()))
      throw new \RuntimeException($this::class . '::handler() must return a callback');
    $this->handler()($e);
    return $this;
  }
}
