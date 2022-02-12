SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE murid (
  nama varchar NOT NULL,
  nisn int NOT NULL,
  kelas int NOT NULL,
  alamat varchar NOT NULL
)
--
-- Indexes for dumped tables
--

--
-- Indexes for table `murid`
--
ALTER TABLE murid
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE murid 
ADD COLUMN id bigint 
GENERATED  ALWAYS  AS IDENTITY PRIMARY KEY;
COMMIT;