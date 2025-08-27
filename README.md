
# 🐳 Docker Network Infrastructure

This project demonstrates the deployment of a complete professional network infrastructure using **Docker Compose**. It includes a load balancer, multiple Apache/PHP web servers, a PostgreSQL database, and a PGAdmin manager — all connected via virtual networks and persistent volumes.

This project was developed by **Julen Cruz** and **Igor Ulyanov**.

---

## 🧱 Architecture

- **🔁 Load Balancer**:  
  - Nginx container that distributes traffic across multiple backend servers.
- **🖥️ Web Servers**:  
  - Five Apache/PHP containers simulating a scalable backend environment.
- **🗄️ Database**:  
  - PostgreSQL container with persistent volume for data storage.
- **🛠️ Database Manager**:  
  - PGAdmin web interface for database administration.
- **🔗 Docker Networks**:  
  - `FrontendNet`: connects Nginx and the web servers.  
  - `BackendNet`: connects web servers with the database.  
  - `ManagementNet`: connects PGAdmin with the database.

---

## ✨ Features

- Fully containerized and modular infrastructure.
- Scalable architecture with isolated services.
- Host volumes for persistent configuration and data.
- Ideal for testing real-world network and service setups.
- Simple to extend, replicate or deploy.

---

## 🚀 Usage

1. **Clone the repository:**
   ```bash
   git clone https://github.com/julencruz/Docker_Network.git
   cd Docker_Network
   ```

2. **Start the infrastructure:**
   ```bash
   docker-compose up -d
   ```

3. **Access services:**
   - 🔗 Load Balancer (Nginx): [http://localhost:20000](http://localhost:20000)  
   - 🛠️ PGAdmin: [http://localhost:20001](http://localhost:20001)

---

## 💾 Volumes & Configuration

- **Nginx configuration**:  
  `/some/hostlocation/nginx.conf`
- **PGAdmin configuration**:  
  `/some/hostlocation/pgadminconf/`
- **PostgreSQL data**:  
  `/other/hostlocation/data/`

---

## 🗺️ Network Diagram

![Architecture Diagram](assets/projects/docker-network-diagram.png)

---

## 📬 Contact

Feel free to reach out if you have questions or suggestions regarding this infrastructure setup!
