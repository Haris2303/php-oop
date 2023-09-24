<?php

namespace Data\One {
    class Conflict
    {
    }
}

namespace Data\Two {
    class Conflict
    {
    }
}

// Global namespace
namespace {

    class Main
    {
        public static function main(): void
        {
            $conflictOne = new \Data\One\Conflict;
            $conflictTwo = new \Data\Two\Conflict;
        }
    }

    Main::main();
}
