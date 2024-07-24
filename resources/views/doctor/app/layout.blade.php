<title>Doser | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    @white: #fff;
@blue: #4b84fe;
@colorDark: #1b253d;
@colorLight: #99a0b0;
@red: #fa5b67;
@yellow: #ffbb09;
@bg: #f5f5fa;
@bgDark: #ede8f0;

* {
	box-sizing: border-box;
}

html,
body {
	color: @colorLight;
	width: 100%;
	height: 100%;
	overflow: hidden;
	background: @bg;
	font-size: 16px;
	line-height: 120%;
	font-family: Open Sans, Helvetica, sans-serif;
}

.dashboard {
	display: grid;
	width: 100%;
	height: 100%;
	grid-gap: 0;
	grid-template-columns: 300px auto;
	grid-template-rows: 80px auto;
  grid-template-areas: 'menu search'
												'menu content';
}

.search-wrap {
	grid-area: search;
	background: @white;
	border-bottom: 1px solid @bgDark;
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 0 3em;
	
	.search {
		height: 40px;
		
		label {
			display: flex;
			align-items: center;
			height: 100%;
			
			svg {
				display: block;
				
				path,
				circle {
					fill: lighten(@colorLight, 10%);
					transition: fill .15s ease;
				}
			}
			
			input {
				display: block;
				padding-left: 1em;
				height: 100%;
				margin: 0;
				border: 0;
				
				&:focus {
					background: @bg;
				}
			}
			
			&:hover {
				svg {
					path,
					circle {
						fill: lighten(@colorDark, 10%);
					}
				}
			}
		}
	}
	
	.user-actions {
		button {
			border: 0;
			background: none;
			width: 32px;
			height: 32px;
			margin: 0;
			padding: 0;
			margin-left: 0.5em;
			
			svg {
				position: relative;
				top: 2px;
				
				path,
				circle {
					fill: lighten(@colorLight, 10%);
					transition: fill .15s ease;
				}
			}
			
			&:hover {
				svg {
					path,
					circle {
						fill: lighten(@colorDark, 10%);
					}
				}
			}
		}
	}
}

.menu-wrap {
	grid-area: menu;
	padding-bottom: 3em;
	overflow: auto;
	background: @white;
	border-right: 1px solid @bgDark;
	
	.user {
		height: 80px;
		display: flex;
		align-items: center;
		justify-content: flex-start;
		margin: 0;
		padding: 0 3em;
		
		.user-avatar {
			width: 40px;
			height: 40px;
			border-radius: 50%;
			overflow: hidden;
			
			img {
				display: block;
				width: 100%;
				height: 100%;
				object-fit: cover;
			}
		}
		
		figcaption {
			margin: 0;
			padding: 0 0 0 1em;
			color: @colorDark;
			font-weight: 700;
			font-size: 0.875em;
			line-height: 100%;
		}
	}
	
	nav {
		display: block;
		padding: 0 3em;
		
		section {
			display: block;
			padding: 3em 0 0;
		}
		
		h3 {
			margin: 0;
			font-size: .875em;
			text-transform: uppercase;
			color: @blue;
			font-weight: 600;
		}
		
		ul {
			display: block;
			padding: 0;
			margin: 0;
		}
		
		li {
			display: block;
			padding: 0;
			margin: 1em 0 0;
			
			a {
				display: flex;
				align-items: center;
				justify-content: flex-start;
				color: @colorLight;
				text-decoration: none;
				font-weight: 600;
				font-size: .875em;
				transition: color .15s ease;
				
				svg {
					display: block;
					margin-right: 1em;
					
					path,
					circle {
						fill: lighten(@colorLight, 10%);
						transition: fill .15s ease;
					}
				}
				
				&:hover {
					color: @colorDark;
					
					svg {
						path,
						circle  {
							fill: lighten(@colorDark, 10%);
						}
					}
				}
				
				&.active {
					color: @blue;
					
					svg {
						path,
						circle  {
							fill: @blue;
						}
					}
				}
			}
		}
	}
}

.content-wrap {
	grid-area: content;
	padding: 3em;
	overflow: auto;
	
	.content-head	{
		display: flex;
		align-items: center;
		justify-content: space-between;
		
		h1 {
			font-size: 1.375em;
			line-height: 100%;
			color: @colorDark;
			font-weight: 500;
			margin: 0;
			padding: 0;
		}
		
		.action {
			button {
				border: 0;
				background: @blue;
				color: @white;
				width: auto;
				height: 3.5em;
				padding: 0 2.25em;
				border-radius: 3.5em;
				font-size: 1em;
				text-transform: uppercase;
				font-weight: 600;
				transition: background-color .15s ease;
				
				&:hover {
					background-color: darken(@blue, 10%);
					
					&:active {
						background-color: darken(@blue, 20%);
						transition: none;
					}
				}
			}
		}
	}

	.info-boxes {
		padding: 3em 0 2em;
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
		grid-gap: 2em;
		
		.info-box {
			background: @white;
			height: 160px;
			display: flex;
			align-items: center;
			justify-content: flex-start;
			padding: 0 3em;
			border: 1px solid @bgDark;
			border-radius: 5px;
			
			.box-icon {
				svg {
					display: block;
					width: 48px;
					height: 48px;
					
					path,
					circle {
						fill: @colorLight;
					}
				}
			}
			
			.box-content {			
				padding-left: 1.25em;
				white-space: nowrap;
				
				.big {
					display: block;
					font-size: 2em;
					line-height: 150%;
					color: @colorDark;
				}
			}
			
			&.active {
				svg {
					circle,
					path {
						fill: @blue;
					}
				}
			}
		}
	}

	.person-boxes {
		padding: 0;
		display: grid;
		grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
		grid-gap: 2em;
		
		.person-box {
			background: @white;
			height: 320px;
			text-align: center;
			padding: 3em;
			border: 1px solid @bgDark;
			border-radius: 5px;
			
			&:nth-child(2n) {
				.box-avatar {
					.no-name {
						background: @blue;
					}
				}
			}
			
			&:nth-child(5n) {
				.box-avatar {
					.no-name {
						background: @yellow;
					}
				}
			}
			
			.box-avatar {
				width: 100px;
				height: 100px;
				border-radius: 50%;
				margin: 0px auto;
				overflow: hidden;
				
				img {
					display: block;
					width: 100%;
					height: 100%;
					object-fit: cover;
				}
				
				.no-name {
					display: flex;
					align-items: center;
					justify-content: center;
					text-align: center;
					color: @white;
					font-size: 1.5em;
					font-weight: 600;
					text-transform: uppercase;
					width: 100%;
					height: 100%;
					background: @red;
				}
			}
			
			.box-bio {
				white-space: no-wrap;
				
				.bio-name {
					margin: 2em 0 .75em;
					color: @colorDark;
					font-size: 1em;
					font-weight: 700;
					line-height: 100%;
				}
				
				.bio-position {
					margin: 0;
					font-size: .875em;
					line-height: 100%;
				}
			}
			
			.box-actions {
				margin-top: 1.25em;
				padding-top: 1.25em;
				width: 100%;
				border-top: 1px solid @bgDark;
				display: flex;
				align-items: center;
				justify-content: space-between;
				
				button {
					border: 0;
					background: none;
					width: 32px;
					height: 32px;
					margin: 0;
					padding: 0;

					svg {
						position: relative;
						top: 2px;

						path,
						circle {
							fill: lighten(@colorLight, 10%);
							transition: fill .15s ease;
						}
					}

					&:hover {
						svg {
							path,
							circle {
								fill: lighten(@colorDark, 10%);
							}
						}
					}
				}
			}
		}
	}
}
</style>

<div class="dashboard">
	<aside class="search-wrap">
		<div class="search">
		</div>
		
		<div class="user-actions">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        
        <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"/>
                <path d="M11 2h2v10h-2z"/>
            </svg>
        </button>
		</div>
	</aside>
	
	<header class="menu-wrap">
		<figure class="user">
			<div class="user-avatar">
				<img src="logo.jpg" alt="Amanda King">
			</div>
			<figcaption>
				Doser | Admin
			</figcaption>
		</figure>
	
		<nav>
			<section class="dicover">
				<h3>Home</h3>
				
				<ul>
					<li>
						<a href="{{url('/home')}}">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M6.855 14.365l-1.817 6.36a1.001 1.001 0 0 0 1.517 1.106L12 18.202l5.445 3.63a1 1 0 0 0 1.517-1.106l-1.817-6.36 4.48-3.584a1.001 1.001 0 0 0-.461-1.767l-5.497-.916-2.772-5.545c-.34-.678-1.449-.678-1.789 0L8.333 8.098l-5.497.916a1 1 0 0 0-.461 1.767l4.48 3.584zm2.309-4.379c.315-.053.587-.253.73-.539L12 5.236l2.105 4.211c.144.286.415.486.73.539l3.79.632-3.251 2.601a1.003 1.003 0 0 0-.337 1.056l1.253 4.385-3.736-2.491a1 1 0 0 0-1.109-.001l-3.736 2.491 1.253-4.385a1.002 1.002 0 0 0-.337-1.056l-3.251-2.601 3.79-.631z"/></svg>
							Dashboard
						</a>
					</li>
					
					<!-- 
					
					
					<li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.707 19.707L12 13.414l4.461 4.461L14.337 20H20v-5.663l-2.125 2.124L13.414 12l4.461-4.461L20 9.663V4h-5.663l2.124 2.125L12 10.586 5.707 4.293 4.293 5.707 10.586 12l-6.293 6.293z"/></svg>
							Shuffle
						</a>
					</li> -->
				</ul>
			</section>
		
			<section class="tools">
				<h3>Medical</h3>
				
				<ul>
                <li>
						<a href="{{url('/patients')}}">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.353 2.355-6.049-.002-8.416zm-1.412 7.002L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002 1.563 1.571 1.564 4.025.002 5.588z"/></svg>
							Patients
						</a>
					</li>

                    
					<li>
						<a href="{{url('/drugs')}}">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.707 2.293A.996.996 0 0 0 12 2H3a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l9 9a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414l-9-9zM12 19.586l-8-8V4h7.586l8 8L12 19.586z"/><circle cx="7.507" cy="7.505" r="1.505"/></svg>
							Drugs
						</a>
					</li>
                    
					<!-- <li>
						<a href="#" class="active">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"/></svg>
							Search
						</a>
					</li> -->
					
					<!-- <li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 7L11 7 11 11 7 11 7 13 11 13 11 17 13 17 13 13 17 13 17 11 13 11z"/><path d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z"/></svg>
							Records
						</a>
					</li> -->
					
					
				</ul>
			</section>
			
			<section class="dicover">
				<h3>Settings</h3>
				
				<ul>
					<li>
						<a href="{{url('/transfers')}}">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20,9l-4-4v3H9c-2.757,0-5,2.243-5,5s2.243,5,5,5h3v-2H9c-1.654,0-3-1.346-3-3s1.346-3,3-3h7v3L20,9z"/></svg>
							Transfer Patient
						</a>
					</li>
					
					<!-- <li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15,8H8V5L4,9l4,4v-3h7c1.654,0,3,1.346,3,3s-1.346,3-3,3h-3v2h3c2.757,0,5-2.243,5-5S17.757,8,15,8z"/></svg>
							Sell
						</a>
					</li> -->
					
					<li>
						<a href="{{url('/users')}}">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21,3h-4V2h-2v1H9V2H7v1H3C2.447,3,2,3.447,2,4v17c0,0.553,0.447,1,1,1h18c0.553,0,1-0.447,1-1V4C22,3.447,21.553,3,21,3z M7,5v1h2V5h6v1h2V5h3v3H4V5H7z M4,20V10h16v10H4z"/><path d="M11,15.586l-1.793-1.793l-1.414,1.414l2.5,2.5C10.488,17.902,10.744,18,11,18s0.512-0.098,0.707-0.293l5-5l-1.414-1.414 L11,15.586z"/></svg>
							Users
						</a>
					</li>
					
					<!-- <li>
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 12h2v3h-2z"/><path d="M21 7h-1V4a1 1 0 0 0-1-1H5c-1.206 0-3 .799-3 3v11c0 2.201 1.794 3 3 3h16a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zM5 5h13v2H5.012C4.55 6.988 4 6.805 4 6s.55-.988 1-1zm15 13H5.012C4.55 17.988 4 17.805 4 17V8.833c.346.115.691.167 1 .167h15v9z"/></svg>
							Wallet
						</a>
					</li> -->
				</ul>
			</section>
		</nav>
	</header>