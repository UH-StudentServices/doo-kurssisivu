<?php

class UHCMoodiController {

  /** @var UHCMoodiService  */
  private $uhcMoodiService;

  /**
   * @param $uhcMoodiService UHCMoodiService
   */
  public function __construct(UHCMoodiService $uhcMoodiService) {
    $this->uhcMoodiService = $uhcMoodiService;
  }

  /**
   * Gets information regarding the given realisation identified by ID.
   *
   * @param $realisationId int Realisation ID.
   * @return object Response object (@see drupal_http_request()).
   */
  public function get($realisationId) {
    return $this->uhcMoodiService->get($realisationId);
  }

  /**
   * Creates a new course area for the given realisation identified by ID.
   *
   * @param $realisationId int Realisation ID.
   * @return object Response object (@see drupal_http_request()).
   */
  public function create($realisationId) {
    return $this->uhcMoodiService->create($realisationId);
  }
}
