<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-tabs mr-auto">
                        <li class="nav-item">
                            <router-link active-class="active-menu" exact :to="{ name: 'dogs.index' }" class="nav-link lg">Dogs List</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link active-class="active-menu" exact :to="{ name: 'dogs.create' }" class="nav-link">Create new dog</router-link>
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