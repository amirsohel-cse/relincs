function data() {

    function getThemeFromLocalStorage() {
        // if user already changed the theme, use it
        if (window.localStorage.getItem('dark')) {
            return JSON.parse(window.localStorage.getItem('dark'))
        }

        // else return their preferences
        return (!!window.matchwall &&
            window.matchwall('(prefers-color-scheme: dark)').matches
        )
    }

    function setThemeToLocalStorage(value) {
        window.localStorage.setItem('dark', value)
    }

    return {
        tab: 'wall',
        tab_slug: 'latest',
        tab_followes: 'followers',

        managaH: false,
        toggleismanagaH() {
            this.managaH = !this.managaH
        },
        dark: getThemeFromLocalStorage(),
        toggleTheme() {
            this.dark = !this.dark
            setThemeToLocalStorage(this.dark)
        },

        openDropdown: false,
        toggleDropdown() {
            this.openDropdown = !this.openDropdown
        },
        
        isSideMenuOpen: false,
        toggleSideMenu() {
            this.isSideMenuOpen = !this.isSideMenuOpen
        },
        closeSideMenu() {
            this.isSideMenuOpen = false
        },
        isNotificationsMenuOpen: false,
        toggleNotificationsMenu() {
            this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
        },
        closeNotificationsMenu() {
            this.isNotificationsMenuOpen = false
        },
        isProfileMenuOpen: false,
        toggleProfileMenu() {
            this.isProfileMenuOpen = !this.isProfileMenuOpen
        },
        closeProfileMenu() {
            this.isProfileMenuOpen = false
        },
        isFeedMenuOpen: false,
        toggleFeedMenu() {
            this.isFeedMenuOpen = !this.isFeedMenuOpen
        },
        iswallMenuOpen: false,
        togglewallMenu() {
            this.iswallMenuOpen = !this.iswallMenuOpen
        },
        isFavouritesMenuOpen: false,
        toggleFavouritesMenu() {
            this.isFavouritesMenuOpen = !this.isFavouritesMenuOpen
        },
        isSettPMenuOpen: false,
        toggleSettPMenu() {
            this.isSettPMenuOpen = !this.isSettPMenuOpen
        },
        isSettHMenuOpen: false,
        toggleSettHMenu() {
            this.isSettHMenuOpen = !this.isSettHMenuOpen
        },
        ismediaMenuOpen: false,
        togglemediaMenu() {
            this.ismediaMenuOpen = !this.ismediaMenuOpen
        },
        isManageFollowersMenuOpen: false,
        toggleManageFollowersMenu() {
            this.isManageFollowersMenuOpen = !this.isManageFollowersMenuOpen
        },
        isPageMoreOpen: false,
        togglePageMoreMenu() {
            this.isPageMoreOpen = !this.isPageMoreOpen
        },
        isManageHubs: false,
        toggleManageHubs() {
            this.isManageHubs = !this.isManageHubs
        },

        // Modal
        isModalOpen: false,

        trapCleanup: null,
        openModal() {
            this.isModalOpen = true
            this.trapCleanup = focusTrap(document.querySelector('#modal'))
        },
        closeModal() {
            this.isModalOpen = false
            this.trapCleanup()
        },
    }
}