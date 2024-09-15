<?php
function processFruitPosition(array $fruitPositions, $treePosition) {
  return array_map(function ($ele) use ($treePosition) {
    return $ele + $treePosition;
  }, $fruitPositions);

}

?>