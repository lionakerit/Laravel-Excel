<?php

namespace Maatwebsite\Excel;

interface Reader
{
    /**
     * @param string        $filePath
     * @param callable|null $callback
     *
     * @return Spreadsheet
     */
    public function load(string $filePath, callable $callback = null): Spreadsheet;
}