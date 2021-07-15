<?php namespace SIKessEm\Errors;

use \Throwable;

/**
 * The catcher interface
 *
 * @author SIGUI Kessé Emmanuel
 * @package sikessem/errors
 * @license Apache-2.0
 */
interface CatcherDefiner {

  /**
   * Catch an error or an exception
   *
   * @param  \Throwable $e The error or exception to catch
   * @return self
   */
  public function catch(Throwable $e): self;
}
