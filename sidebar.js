const sideBarTemplate = document.createElement("template");

sideBarTemplate.innerHTML = `
    <style>
    .sidebar {
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 400px;
        position: fixed;
        top: 0;
        bottom: 0;
        margin-bottom: 3rem;
        overflow-y: auto;

        background: rgb(238, 202, 255);
        background: linear-gradient(
          180deg,
          rgba(238, 202, 255, 1) 23%,
          rgba(243, 217, 254, 1) 53%,
          rgba(255, 253, 253, 0) 97%,
          rgba(255, 253, 253, 0) 100%,
          rgba(255, 253, 253, 0) 118%
        );
      }
      
      .logo {
        display: flex;
        margin: 2rem;
        justify-content: center;
      }
      
      .title {
        color: #bf52a2;
        margin-left: 1rem;
        font-size: 3rem;
      }
      
      .sidebar-menu {
        height: 100%;
        width: 300px;
        margin-bottom: 20rem;
        margin: auto;
        border-radius: 10px;
        padding-top: 1rem;
        background: rgb(194, 170, 209);
        background: rgb(194, 170, 209);
        background: linear-gradient(
          180deg,
          rgba(194, 170, 209, 1) 6%,
          rgba(217, 202, 226, 1) 100%,
          rgba(255, 253, 253, 0) 100%
        );
      }
      
      .sidebar-menu-item {
        display: flex;
        align-items: center;
        gap: 30px;
        font-size: 1.2rem;
        color: black;
        text-decoration: none;

      }

      .sidebar-menu-item: hover {
        color: #8328ba;
      }
      
      .logout {
        display: flex;
        align-items: center;
        gap: 20px;
        font-size: 1.2rem;
        bottom: 0;
        position: absolute;
        margin-left: 2rem;
      }
      
    </style>
    <body>
            <div class="sidebar">
            <div class="logo">
                <img src="image/logo.svg">
                <h1 class="title">Amusigo.</h1>
            </div>
       
            <div class="sidebar-menu">
            <ul>
                
                <a  class="sidebar-menu-item" href="home.php">
                <i class="fa-solid fa-house"></i>
                <p> Home</p>
                </a>
           
                <a  class="sidebar-menu-item" href="musicbank.php">
                <i class="fa-solid fa-clipboard-list"></i>
                <p> Music Bank</p>
                </a>
                
        
                
                <a class="sidebar-menu-item" href="musicmate.php">
                <i class="fa-solid fa-user-group"></i>
                <p>Music Mates</p>
                </a>
                

                <a  class="sidebar-menu-item" href="playlist.php">
                <i class="fa-solid fa-music"></i>
                <p> Playlists</p>
                </a>
                
                

            </ul>
            <div class="logout" >
                <i class="fa-solid fa-right-from-bracket"></i>
                <p>Logout</p>
            </div>

            </div>
            </div>
        
    </body>
`;

class sidebar extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    const fontAwesome = document.querySelector('link[href*="font-awesome"]');
    const shadowRoot = this.attachShadow({ mode: "closed" });

    if (fontAwesome) {
      shadowRoot.appendChild(fontAwesome.cloneNode());
    }

    shadowRoot.appendChild(sideBarTemplate.content);
  }
}

customElements.define("sidebar-component", sidebar);
