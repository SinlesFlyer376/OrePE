<?php namespace Sinles\OrePE;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\block\Block;
use pocketmine\item\Item;
class Main extends PluginBase implements Listener {
	public function onEnable(){
		$this->getLogger()->info("OrePE Has Been Enabled!");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onDisable(){
	$this->getLogger()->info("OrePE Has Been Disabled!");
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onBreak(BlockBreakEvent $event) {
		if($event->getBlock()->getId() === Block::IRON_ORE) {
		$drops = array();
		$drops[] = Item::get(Item::IRON_INGOT, 0, 1);
		$event->setDrops($drops);
	}
}
	public function onBreak(BlockBreakEvent $e) {
		if($e->getBlock()->getId() === Block::GOLD_INGOT) {
		$drops = array();
		$drops[] = Item::get(Item::GOLD_INGOT, 0, 1);
		$event->setDrops($drops);
	}
}
	public function onBreak(BlockBreakEvent $event) {
		if($event->getBlock()->getId() === Block::DIAMOND_ORE) {
		$drops = array();
		$drops[] = Item::get(Item::DIAMOND_ORE, 0, 1);
		$event->setDrops($drops);
	}
}
}
