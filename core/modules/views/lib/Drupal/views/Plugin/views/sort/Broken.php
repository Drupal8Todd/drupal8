<?php

/**
 * @file
 * Definition of Drupal\views\Plugin\views\sort\Broken.
 */

namespace Drupal\views\Plugin\views\sort;

use Drupal\views\Plugin\views\BrokenHandlerTrait;

/**
 * A special handler to take the place of missing or broken handlers.
 *
 * @ingroup views_sort_handlers
 *
 * @PluginID("broken")
 */
class Broken extends SortPluginBase {
  use BrokenHandlerTrait;

}
