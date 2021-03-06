<?php

  namespace WebpConverter\Convert;

  class Size
  {
    const DELETED_FILE_EXTENSION = '.deleted';

    public function __construct()
    {
      add_action('webpc_convert_after', [$this, 'removeImageIfIsLarger'], 10, 2); 
    }

    /* ---
      Functions
    --- */

    public function removeImageIfIsLarger($webpPath, $originalPath)
    {
      if ((!$settings = apply_filters('webpc_get_values', []))
        || !in_array('only_smaller', $settings['features'])
        || (!file_exists($webpPath) || !file_exists($originalPath))
        || (filesize($webpPath) < filesize($originalPath))) return;

      $file = fopen($webpPath . self::DELETED_FILE_EXTENSION, 'w');
      fclose($file);
      unlink($webpPath);

      $e = new \Exception(sprintf(
        'Image "%s" converted to WebP is larger than original and has been deleted.',
        $originalPath
      ));
      $e->status = 'larger_than_original';
      throw $e;
    }
  }