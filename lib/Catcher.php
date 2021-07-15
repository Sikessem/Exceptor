<?php namespace SIKessEm\Errors;

/**
 * The catcher class
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/errors
 * @license Apache-2.0
 */
class Catcher implements CatcherDefiner {
  use DefinedCatcher;

  /**
   * Create a new catcher
   *
   * @param callable $handler The callback to use for handling
   */
  public function __construct(callable $handler) {
    $this->handler = $handler;
  }

  /**
   * @var callback The callback to use for handling
   */
  protected $handler;

  /**
   * @return callback The callback to use for handling
   */
  public function handler() {
    return $this->handler;
  }
}
