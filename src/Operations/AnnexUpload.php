<?php

namespace AlibabaApi\Operations;

class AnnexUpload extends AbstractOperation
{
    public function getName()
    {
        return 'alibaba.icbu.annex.upload';
    }

    public function setFileName($fileName)
    {
        $this->parameter['file_name'] = $fileName;

        return $this;
    }

    public function setFileInputStreamBytes($fileInputStreamBytes)
    {
        $this->parameter['file_input_stream_bytes'] = $fileInputStreamBytes;

        return $this;
    }

    public function setSource()
    {
        $this->parameter['source'] = 'top';

        return $this;
    }
}