<?php


    namespace rewardFunction;


    class RewardFunction
    {

        private $maxPerDay = 50;
        private $minAllowJump = 0.1;
        private $maxJumpWeigth = 0.2;


        private $rewardMeanWeight = 0.8;
        private $rewardSigmaWeight = 0.25;
        private $rewardKurtoisWeight = 0.05;




        public function getSlotFilling(): array
        {
            return ['20210825' => 10, '20210826' => 9];
        }

        public function getSlotFillingAfterMove(): array
        {
            return ['20210825' => 10, '20210826' => 10];
        }


        private function getSlotsMean(array $SlotsFilling): int
        {
            return 25;
        }

        private function getSlotsSigma(array $SlotsFilling): int
        {
            return 12;
        }

        private function getSlotsKurtois(array $SlotsFilling): int
        {
            return 3;
        }

        private function getSlotMeanAfterMove(array $slotsPremove, array $slotsPostMove): int
        {
            return 24;
        }

        private function getSlotSigmaAfterMove(): int
        {
            return 20;
        }

        private function getSlotKurtoisAfterMove(): int
        {
            return 3;
        }


        public function getMoveReward(): float
        {
            return $this->getSlotMeanAfterMove([], []) * $this->rewardMeanWeight +
                   $this->getSlotSigmaAfterMove([], []) * $this->rewardSigmaWeight +
                   $this->getSlotKurtoisAfterMove([], []) * $this->rewardKurtoisWeight;
        }

        public function getValidMoves(string $typProcess, array $slots): array
        {
            return [];
        }



    }
