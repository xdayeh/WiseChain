const getMode = localStorage.getItem("DisplayMode");
const DarkMode = () => {
    document.querySelector('nav').classList.toggle("navbar-dark");
    document.querySelector('nav').classList.toggle("bg-dark");
    document.querySelector('footer').classList.toggle("text-white");
    document.querySelector('footer').classList.toggle("bg-dark");
};
if (getMode && getMode === "dark" || (window.matchMedia('(prefers-color-scheme: dark)').matches && getMode !== "light") ){
    DarkMode();
}
document.getElementById("toggleMode").addEventListener('click', function(){
    DarkMode();
    if (!document.querySelector('nav').classList.contains("navbar-dark")){
        return localStorage.setItem("DisplayMode", "light");
    }else {
        return localStorage.setItem("DisplayMode", "dark");
    }
});