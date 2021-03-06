<?php

namespace Drupal\aggregator\Tests;

/**
 * Update feeds on cron.
 *
 * @group aggregator
 */
class AggregatorCronTest extends AggregatorTestBase {
  /**
   * Adds feeds and updates them via cron process.
   */
  public function testCron() {
    // Create feed and test basic updating on cron.
    $this->createSampleNodes();
    $feed = $this->createFeed();
    $this->cronRun();
    $this->assertEqual(5, db_query('SELECT COUNT(*) FROM {aggregator_item} WHERE fid = :fid', array(':fid' => $feed->id()))->fetchField());
    $this->deleteFeedItems($feed);
    $this->assertEqual(0, db_query('SELECT COUNT(*) FROM {aggregator_item} WHERE fid = :fid', array(':fid' => $feed->id()))->fetchField());
    $this->cronRun();
    $this->assertEqual(5, db_query('SELECT COUNT(*) FROM {aggregator_item} WHERE fid = :fid', array(':fid' => $feed->id()))->fetchField());

    // Test feed locking when queued for update.
    $this->deleteFeedItems($feed);
    db_update('aggregator_feed')
      ->condition('fid', $feed->id())
      ->fields(array(
        'queued' => REQUEST_TIME,
      ))
      ->execute();
    $this->cronRun();
    $this->assertEqual(0, db_query('SELECT COUNT(*) FROM {aggregator_item} WHERE fid = :fid', array(':fid' => $feed->id()))->fetchField());
    db_update('aggregator_feed')
      ->condition('fid', $feed->id())
      ->fields(array(
        'queued' => 0,
      ))
      ->execute();
    $this->cronRun();
    $this->assertEqual(5, db_query('SELECT COUNT(*) FROM {aggregator_item} WHERE fid = :fid', array(':fid' => $feed->id()))->fetchField());
  }
}
