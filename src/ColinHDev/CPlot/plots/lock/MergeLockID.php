<?php

declare(strict_types=1);

namespace ColinHDev\CPlot\plots\lock;

use pocketmine\world\ChunkLockId;

/**
 * This {@see PlotLockID} is used to lock a {@see Plot}, while merging it with another {@see Plot}.
 */
class MergeLockID extends PlotLockID {

    private ChunkLockId $chunkLockId;

    public function isCompatible(PlotLockID $other) : bool {
        return false;
    }

    public function getChunkLockId() : ?ChunkLockId {
        if (!isset($this->chunkLockId)) {
            $this->chunkLockId = new ChunkLockId();
        }
        return $this->chunkLockId;
    }
}