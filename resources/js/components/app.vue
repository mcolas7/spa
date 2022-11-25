<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul>
                        <li class="nav-item">
                            <router-link :to="{ name: 'dogs.index' }" class="nav-Link">Dogs List</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{ name: 'dogs.create' }" class="nav-Link">Create new dog</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <div class="container">
                <router-view></router-view>
            </div>
        </main>
    </div>
</template>