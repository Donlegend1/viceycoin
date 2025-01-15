import React, { useState } from 'react';

export default function Header() {
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [dropdownOpen, setDropdownOpen] = useState(false);

  return (
    <header
      className={`${
        mobileMenuOpen ? 'kf gl zf rl ij oj' : 'lf hl'
      } f ba qb jc be c`}
    >
      <div className="a">
        <div className="e ha qb be ee">
          <div className="kc zc ng">
            <a href="/" className="ob jc ah ip">
            <p className='text-bold'>
                Viceycoin
            </p>
              {/* <img src="/src/images/logo/logo.svg" alt="logo" className="jc xk" />
              <img src="/src/images/logo/logo-white.svg" alt="logo" className="sb jc wk" /> */}
            </a>
          </div>
          <div className="qb jc be ce ng">
            <div>
              <button
                onClick={() => setMobileMenuOpen((prev) => !prev)}
                className={`d g h/2 ob qd/2 me pg qg mj qk to ${
                  mobileMenuOpen ? 'navbarTogglerActive' : ''
                }`}
              >
                <span
                  className={`e ia ob tb lc mf il ${mobileMenuOpen ? 'sd i' : ''}`}
                ></span>
                <span
                  className={`e ia ob tb lc mf il ${mobileMenuOpen ? 'fj' : ''}`}
                ></span>
                <span
                  className={`e ia ob tb lc mf il ${mobileMenuOpen ? 'j td' : ''}`}
                ></span>
              </button>
              <nav
                className={`d g k jc _c me kf rg sg jj fl fo qo uo cp dp hp xp bq ${
                  mobileMenuOpen ? '' : 'sb'
                }`}
              >
                <ul className="vq ro">
                  <li className="xi ul">
                    <a href="#home" className="scroll-menu qb tg gi oi bj kk vl em ko so ip cq 2xl:ud-ml-12">
                      Home
                    </a>
                  </li>
                  <li>
                    <a href="#features" className="scroll-menu qb tg gi oi xi kk ul em ko so ip cq 2xl:ud-ml-12">
                      About
                    </a>
                  </li>
                  <li>
                    <a href="#roadmap" className="scroll-menu qb tg gi oi xi kk ul em ko so ip cq 2xl:ud-ml-12">
                      Tokenomics
                    </a>
                  </li>
               
                  <li>
                    <a href="#contact" className="scroll-menu qb tg gi oi xi kk ul em ko so ip cq 2xl:ud-ml-12">
                      Road Map
                    </a>
                  </li>
                  <li>
                    <a href="#contact" className="scroll-menu qb tg gi oi xi kk ul em ko so ip cq 2xl:ud-ml-12">
                      How to Buy
                    </a>
                  </li>
                  <li>
                    <a href="#contact" className="scroll-menu qb tg gi oi xi kk ul em ko so ip cq 2xl:ud-ml-12">
                      FAQ
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            <div className="qb ce lh pp oq 2xl:ud-pl-20">
              <div className="oa">
                <label htmlFor="darkToggler" className="qb ub mc vd be de oe nf jl">
                  <input
                    type="checkbox"
                    name="darkToggler"
                    id="darkToggler"
                    className="b"
                    aria-label="darkToggler"
                  />
                  <span className="qb vb nc be de oe of zi hl ul">
                    <svg width="16" height="16" viewBox="0 0 16 16" className="cg">
                      <path d="..." />
                    </svg>
                  </span>
                  <span className="qb vb nc be de oe lf xi kl vl">
                    <svg width="13" height="15" viewBox="0 0 13 15" className="cg">
                      <path d="..." />
                    </svg>
                  </span>
                </label>
              </div>
              <div className="sb pm">
                <a
                  href="signin.html"
                  className="qb be de oe re ze vg wg ii oi xi qj ek fk lk zk vl am fm lg:px-4 xl:px-8"
                >
                  Sign In
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  );
}
